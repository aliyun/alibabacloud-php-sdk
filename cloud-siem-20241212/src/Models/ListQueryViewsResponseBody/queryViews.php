<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListQueryViewsResponseBody;

use AlibabaCloud\Dara\Model;

class queryViews extends Model
{
    /**
     * @var string
     */
    public $queryViewCondition;

    /**
     * @var string
     */
    public $queryViewCriteria;

    /**
     * @var string
     */
    public $queryViewFields;

    /**
     * @var string
     */
    public $queryViewId;

    /**
     * @var string
     */
    public $queryViewName;

    /**
     * @var string
     */
    public $queryViewOrder;

    /**
     * @var string
     */
    public $queryViewScene;

    /**
     * @var string
     */
    public $queryViewStatus;

    /**
     * @var string
     */
    public $queryViewType;
    protected $_name = [
        'queryViewCondition' => 'QueryViewCondition',
        'queryViewCriteria' => 'QueryViewCriteria',
        'queryViewFields' => 'QueryViewFields',
        'queryViewId' => 'QueryViewId',
        'queryViewName' => 'QueryViewName',
        'queryViewOrder' => 'QueryViewOrder',
        'queryViewScene' => 'QueryViewScene',
        'queryViewStatus' => 'QueryViewStatus',
        'queryViewType' => 'QueryViewType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->queryViewCondition) {
            $res['QueryViewCondition'] = $this->queryViewCondition;
        }

        if (null !== $this->queryViewCriteria) {
            $res['QueryViewCriteria'] = $this->queryViewCriteria;
        }

        if (null !== $this->queryViewFields) {
            $res['QueryViewFields'] = $this->queryViewFields;
        }

        if (null !== $this->queryViewId) {
            $res['QueryViewId'] = $this->queryViewId;
        }

        if (null !== $this->queryViewName) {
            $res['QueryViewName'] = $this->queryViewName;
        }

        if (null !== $this->queryViewOrder) {
            $res['QueryViewOrder'] = $this->queryViewOrder;
        }

        if (null !== $this->queryViewScene) {
            $res['QueryViewScene'] = $this->queryViewScene;
        }

        if (null !== $this->queryViewStatus) {
            $res['QueryViewStatus'] = $this->queryViewStatus;
        }

        if (null !== $this->queryViewType) {
            $res['QueryViewType'] = $this->queryViewType;
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
        if (isset($map['QueryViewCondition'])) {
            $model->queryViewCondition = $map['QueryViewCondition'];
        }

        if (isset($map['QueryViewCriteria'])) {
            $model->queryViewCriteria = $map['QueryViewCriteria'];
        }

        if (isset($map['QueryViewFields'])) {
            $model->queryViewFields = $map['QueryViewFields'];
        }

        if (isset($map['QueryViewId'])) {
            $model->queryViewId = $map['QueryViewId'];
        }

        if (isset($map['QueryViewName'])) {
            $model->queryViewName = $map['QueryViewName'];
        }

        if (isset($map['QueryViewOrder'])) {
            $model->queryViewOrder = $map['QueryViewOrder'];
        }

        if (isset($map['QueryViewScene'])) {
            $model->queryViewScene = $map['QueryViewScene'];
        }

        if (isset($map['QueryViewStatus'])) {
            $model->queryViewStatus = $map['QueryViewStatus'];
        }

        if (isset($map['QueryViewType'])) {
            $model->queryViewType = $map['QueryViewType'];
        }

        return $model;
    }
}
