<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class DeleteBackupClientResourceRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $clientIds;
    protected $_name = [
        'clientIds' => 'ClientIds',
    ];

    public function validate()
    {
        if (\is_array($this->clientIds)) {
            Model::validateArray($this->clientIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientIds) {
            if (\is_array($this->clientIds)) {
                $res['ClientIds'] = [];
                foreach ($this->clientIds as $key1 => $value1) {
                    $res['ClientIds'][$key1] = $value1;
                }
            }
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
        if (isset($map['ClientIds'])) {
            if (!empty($map['ClientIds'])) {
                $model->clientIds = [];
                foreach ($map['ClientIds'] as $key1 => $value1) {
                    $model->clientIds[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
