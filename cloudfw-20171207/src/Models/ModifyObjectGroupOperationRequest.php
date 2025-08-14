<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class ModifyObjectGroupOperationRequest extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string[]
     */
    public $objectList;

    /**
     * @var string
     */
    public $objectOperation;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'comment' => 'Comment',
        'direction' => 'Direction',
        'lang' => 'Lang',
        'objectList' => 'ObjectList',
        'objectOperation' => 'ObjectOperation',
        'objectType' => 'ObjectType',
        'sourceIp' => 'SourceIp',
    ];

    public function validate()
    {
        if (\is_array($this->objectList)) {
            Model::validateArray($this->objectList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->objectList) {
            if (\is_array($this->objectList)) {
                $res['ObjectList'] = [];
                $n1 = 0;
                foreach ($this->objectList as $item1) {
                    $res['ObjectList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->objectOperation) {
            $res['ObjectOperation'] = $this->objectOperation;
        }

        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['ObjectList'])) {
            if (!empty($map['ObjectList'])) {
                $model->objectList = [];
                $n1 = 0;
                foreach ($map['ObjectList'] as $item1) {
                    $model->objectList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ObjectOperation'])) {
            $model->objectOperation = $map['ObjectOperation'];
        }

        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
