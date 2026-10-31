<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateRectifyFlowRequest;

use AlibabaCloud\Dara\Model;

class createCommand extends Model
{
    /**
     * @var bool
     */
    public $bindToRectify;

    /**
     * @var int
     */
    public $bindToRectifyId;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $governItemType;

    /**
     * @var int[]
     */
    public $governObjectIds;

    /**
     * @var string
     */
    public $rectifyName;

    /**
     * @var string
     */
    public $rectifyPriority;

    /**
     * @var string
     */
    public $rectifyScope;

    /**
     * @var string
     */
    public $rectifyUser;

    /**
     * @var string
     */
    public $verifyUser;
    protected $_name = [
        'bindToRectify' => 'BindToRectify',
        'bindToRectifyId' => 'BindToRectifyId',
        'comment' => 'Comment',
        'governItemType' => 'GovernItemType',
        'governObjectIds' => 'GovernObjectIds',
        'rectifyName' => 'RectifyName',
        'rectifyPriority' => 'RectifyPriority',
        'rectifyScope' => 'RectifyScope',
        'rectifyUser' => 'RectifyUser',
        'verifyUser' => 'VerifyUser',
    ];

    public function validate()
    {
        if (\is_array($this->governObjectIds)) {
            Model::validateArray($this->governObjectIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindToRectify) {
            $res['BindToRectify'] = $this->bindToRectify;
        }

        if (null !== $this->bindToRectifyId) {
            $res['BindToRectifyId'] = $this->bindToRectifyId;
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->governItemType) {
            $res['GovernItemType'] = $this->governItemType;
        }

        if (null !== $this->governObjectIds) {
            if (\is_array($this->governObjectIds)) {
                $res['GovernObjectIds'] = [];
                $n1 = 0;
                foreach ($this->governObjectIds as $item1) {
                    $res['GovernObjectIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rectifyName) {
            $res['RectifyName'] = $this->rectifyName;
        }

        if (null !== $this->rectifyPriority) {
            $res['RectifyPriority'] = $this->rectifyPriority;
        }

        if (null !== $this->rectifyScope) {
            $res['RectifyScope'] = $this->rectifyScope;
        }

        if (null !== $this->rectifyUser) {
            $res['RectifyUser'] = $this->rectifyUser;
        }

        if (null !== $this->verifyUser) {
            $res['VerifyUser'] = $this->verifyUser;
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
        if (isset($map['BindToRectify'])) {
            $model->bindToRectify = $map['BindToRectify'];
        }

        if (isset($map['BindToRectifyId'])) {
            $model->bindToRectifyId = $map['BindToRectifyId'];
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['GovernItemType'])) {
            $model->governItemType = $map['GovernItemType'];
        }

        if (isset($map['GovernObjectIds'])) {
            if (!empty($map['GovernObjectIds'])) {
                $model->governObjectIds = [];
                $n1 = 0;
                foreach ($map['GovernObjectIds'] as $item1) {
                    $model->governObjectIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RectifyName'])) {
            $model->rectifyName = $map['RectifyName'];
        }

        if (isset($map['RectifyPriority'])) {
            $model->rectifyPriority = $map['RectifyPriority'];
        }

        if (isset($map['RectifyScope'])) {
            $model->rectifyScope = $map['RectifyScope'];
        }

        if (isset($map['RectifyUser'])) {
            $model->rectifyUser = $map['RectifyUser'];
        }

        if (isset($map['VerifyUser'])) {
            $model->verifyUser = $map['VerifyUser'];
        }

        return $model;
    }
}
