<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GetFileDetectResultRequest extends Model
{
    /**
     * @var string[]
     */
    public $hashKeyList;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'hashKeyList' => 'HashKeyList',
        'sourceIp' => 'SourceIp',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->hashKeyList)) {
            Model::validateArray($this->hashKeyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
