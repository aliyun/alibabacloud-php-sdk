<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateAttackPathWhitelistRequest\attackPathAssetList;

class CreateAttackPathWhitelistRequest extends Model
{
    /**
     * @var attackPathAssetList[]
     */
    public $attackPathAssetList;

    /**
     * @var string
     */
    public $pathName;

    /**
     * @var string
     */
    public $pathType;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $whitelistName;

    /**
     * @var string
     */
    public $whitelistType;
    protected $_name = [
        'attackPathAssetList' => 'AttackPathAssetList',
        'pathName' => 'PathName',
        'pathType' => 'PathType',
        'remark' => 'Remark',
        'whitelistName' => 'WhitelistName',
        'whitelistType' => 'WhitelistType',
    ];

    public function validate()
    {
        if (\is_array($this->attackPathAssetList)) {
            Model::validateArray($this->attackPathAssetList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackPathAssetList) {
            if (\is_array($this->attackPathAssetList)) {
                $res['AttackPathAssetList'] = [];
                $n1 = 0;
                foreach ($this->attackPathAssetList as $item1) {
                    $res['AttackPathAssetList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pathName) {
            $res['PathName'] = $this->pathName;
        }

        if (null !== $this->pathType) {
            $res['PathType'] = $this->pathType;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->whitelistName) {
            $res['WhitelistName'] = $this->whitelistName;
        }

        if (null !== $this->whitelistType) {
            $res['WhitelistType'] = $this->whitelistType;
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
        if (isset($map['AttackPathAssetList'])) {
            if (!empty($map['AttackPathAssetList'])) {
                $model->attackPathAssetList = [];
                $n1 = 0;
                foreach ($map['AttackPathAssetList'] as $item1) {
                    $model->attackPathAssetList[$n1] = attackPathAssetList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PathName'])) {
            $model->pathName = $map['PathName'];
        }

        if (isset($map['PathType'])) {
            $model->pathType = $map['PathType'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['WhitelistName'])) {
            $model->whitelistName = $map['WhitelistName'];
        }

        if (isset($map['WhitelistType'])) {
            $model->whitelistType = $map['WhitelistType'];
        }

        return $model;
    }
}
