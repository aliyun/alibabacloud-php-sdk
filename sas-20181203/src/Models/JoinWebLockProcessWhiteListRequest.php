<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class JoinWebLockProcessWhiteListRequest extends Model
{
    /**
     * @var string[]
     */
    public $processPaths;

    /**
     * @var string
     */
    public $uuids;
    protected $_name = [
        'processPaths' => 'ProcessPaths',
        'uuids' => 'Uuids',
    ];

    public function validate()
    {
        if (\is_array($this->processPaths)) {
            Model::validateArray($this->processPaths);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->processPaths) {
            if (\is_array($this->processPaths)) {
                $res['ProcessPaths'] = [];
                $n1 = 0;
                foreach ($this->processPaths as $item1) {
                    $res['ProcessPaths'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProcessPaths'])) {
            if (!empty($map['ProcessPaths'])) {
                $model->processPaths = [];
                $n1 = 0;
                foreach ($map['ProcessPaths'] as $item1) {
                    $model->processPaths[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
