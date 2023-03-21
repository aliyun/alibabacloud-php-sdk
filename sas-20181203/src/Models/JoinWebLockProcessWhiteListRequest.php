<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

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
        'uuids'        => 'Uuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->processPaths) {
            $res['ProcessPaths'] = $this->processPaths;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JoinWebLockProcessWhiteListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProcessPaths'])) {
            if (!empty($map['ProcessPaths'])) {
                $model->processPaths = $map['ProcessPaths'];
            }
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
