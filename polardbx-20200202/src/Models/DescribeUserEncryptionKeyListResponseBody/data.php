<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeUserEncryptionKeyListResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $keyIds;
    protected $_name = [
        'keyIds' => 'KeyIds',
    ];

    public function validate()
    {
        if (\is_array($this->keyIds)) {
            Model::validateArray($this->keyIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyIds) {
            if (\is_array($this->keyIds)) {
                $res['KeyIds'] = [];
                $n1 = 0;
                foreach ($this->keyIds as $item1) {
                    $res['KeyIds'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['KeyIds'])) {
            if (!empty($map['KeyIds'])) {
                $model->keyIds = [];
                $n1 = 0;
                foreach ($map['KeyIds'] as $item1) {
                    $model->keyIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
