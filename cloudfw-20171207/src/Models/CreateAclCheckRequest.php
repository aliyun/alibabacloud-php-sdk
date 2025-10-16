<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class CreateAclCheckRequest extends Model
{
    /**
     * @var string
     */
    public $aclType;

    /**
     * @var string[]
     */
    public $checkNames;

    /**
     * @var string
     */
    public $lang;
    protected $_name = [
        'aclType' => 'AclType',
        'checkNames' => 'CheckNames',
        'lang' => 'Lang',
    ];

    public function validate()
    {
        if (\is_array($this->checkNames)) {
            Model::validateArray($this->checkNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
        }

        if (null !== $this->checkNames) {
            if (\is_array($this->checkNames)) {
                $res['CheckNames'] = [];
                $n1 = 0;
                foreach ($this->checkNames as $item1) {
                    $res['CheckNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }

        if (isset($map['CheckNames'])) {
            if (!empty($map['CheckNames'])) {
                $model->checkNames = [];
                $n1 = 0;
                foreach ($map['CheckNames'] as $item1) {
                    $model->checkNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
