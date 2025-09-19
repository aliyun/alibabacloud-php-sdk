<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateFileDetectUploadUrlRequest\hashKeyContextList;

class CreateFileDetectUploadUrlRequest extends Model
{
    /**
     * @var hashKeyContextList[]
     */
    public $hashKeyContextList;

    /**
     * @var string[]
     */
    public $hashKeyList;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'hashKeyContextList' => 'HashKeyContextList',
        'hashKeyList' => 'HashKeyList',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->hashKeyContextList)) {
            Model::validateArray($this->hashKeyContextList);
        }
        if (\is_array($this->hashKeyList)) {
            Model::validateArray($this->hashKeyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hashKeyContextList) {
            if (\is_array($this->hashKeyContextList)) {
                $res['HashKeyContextList'] = [];
                $n1 = 0;
                foreach ($this->hashKeyContextList as $item1) {
                    $res['HashKeyContextList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hashKeyList) {
            if (\is_array($this->hashKeyList)) {
                $res['HashKeyList'] = [];
                $n1 = 0;
                foreach ($this->hashKeyList as $item1) {
                    $res['HashKeyList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['HashKeyContextList'])) {
            if (!empty($map['HashKeyContextList'])) {
                $model->hashKeyContextList = [];
                $n1 = 0;
                foreach ($map['HashKeyContextList'] as $item1) {
                    $model->hashKeyContextList[$n1] = hashKeyContextList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HashKeyList'])) {
            if (!empty($map['HashKeyList'])) {
                $model->hashKeyList = [];
                $n1 = 0;
                foreach ($map['HashKeyList'] as $item1) {
                    $model->hashKeyList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
