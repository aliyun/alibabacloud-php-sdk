<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDatasResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDatasResponseBody\data\modifyUser;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDatasResponseBody\data\originator;

class data extends Model
{
    /**
     * @var string
     */
    public $createdTimeGMT;

    /**
     * @var string
     */
    public $creatorUserId;

    /**
     * @var int
     */
    public $dataId;

    /**
     * @var mixed[]
     */
    public $formData;

    /**
     * @var string
     */
    public $formInstanceId;

    /**
     * @var string
     */
    public $formUuid;

    /**
     * @var string
     */
    public $instanceValue;

    /**
     * @var string
     */
    public $modelUuid;

    /**
     * @var string
     */
    public $modifiedTimeGMT;

    /**
     * @var string
     */
    public $modifierUserId;

    /**
     * @var modifyUser
     */
    public $modifyUser;

    /**
     * @var originator
     */
    public $originator;

    /**
     * @var string
     */
    public $sequence;

    /**
     * @var string
     */
    public $serialNo;

    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'createdTimeGMT' => 'CreatedTimeGMT',
        'creatorUserId' => 'CreatorUserId',
        'dataId' => 'DataId',
        'formData' => 'FormData',
        'formInstanceId' => 'FormInstanceId',
        'formUuid' => 'FormUuid',
        'instanceValue' => 'InstanceValue',
        'modelUuid' => 'ModelUuid',
        'modifiedTimeGMT' => 'ModifiedTimeGMT',
        'modifierUserId' => 'ModifierUserId',
        'modifyUser' => 'ModifyUser',
        'originator' => 'Originator',
        'sequence' => 'Sequence',
        'serialNo' => 'SerialNo',
        'title' => 'Title',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->formData)) {
            Model::validateArray($this->formData);
        }
        if (null !== $this->modifyUser) {
            $this->modifyUser->validate();
        }
        if (null !== $this->originator) {
            $this->originator->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdTimeGMT) {
            $res['CreatedTimeGMT'] = $this->createdTimeGMT;
        }

        if (null !== $this->creatorUserId) {
            $res['CreatorUserId'] = $this->creatorUserId;
        }

        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }

        if (null !== $this->formData) {
            if (\is_array($this->formData)) {
                $res['FormData'] = [];
                foreach ($this->formData as $key1 => $value1) {
                    $res['FormData'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->formInstanceId) {
            $res['FormInstanceId'] = $this->formInstanceId;
        }

        if (null !== $this->formUuid) {
            $res['FormUuid'] = $this->formUuid;
        }

        if (null !== $this->instanceValue) {
            $res['InstanceValue'] = $this->instanceValue;
        }

        if (null !== $this->modelUuid) {
            $res['ModelUuid'] = $this->modelUuid;
        }

        if (null !== $this->modifiedTimeGMT) {
            $res['ModifiedTimeGMT'] = $this->modifiedTimeGMT;
        }

        if (null !== $this->modifierUserId) {
            $res['ModifierUserId'] = $this->modifierUserId;
        }

        if (null !== $this->modifyUser) {
            $res['ModifyUser'] = null !== $this->modifyUser ? $this->modifyUser->toArray($noStream) : $this->modifyUser;
        }

        if (null !== $this->originator) {
            $res['Originator'] = null !== $this->originator ? $this->originator->toArray($noStream) : $this->originator;
        }

        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }

        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['CreatedTimeGMT'])) {
            $model->createdTimeGMT = $map['CreatedTimeGMT'];
        }

        if (isset($map['CreatorUserId'])) {
            $model->creatorUserId = $map['CreatorUserId'];
        }

        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }

        if (isset($map['FormData'])) {
            if (!empty($map['FormData'])) {
                $model->formData = [];
                foreach ($map['FormData'] as $key1 => $value1) {
                    $model->formData[$key1] = $value1;
                }
            }
        }

        if (isset($map['FormInstanceId'])) {
            $model->formInstanceId = $map['FormInstanceId'];
        }

        if (isset($map['FormUuid'])) {
            $model->formUuid = $map['FormUuid'];
        }

        if (isset($map['InstanceValue'])) {
            $model->instanceValue = $map['InstanceValue'];
        }

        if (isset($map['ModelUuid'])) {
            $model->modelUuid = $map['ModelUuid'];
        }

        if (isset($map['ModifiedTimeGMT'])) {
            $model->modifiedTimeGMT = $map['ModifiedTimeGMT'];
        }

        if (isset($map['ModifierUserId'])) {
            $model->modifierUserId = $map['ModifierUserId'];
        }

        if (isset($map['ModifyUser'])) {
            $model->modifyUser = modifyUser::fromMap($map['ModifyUser']);
        }

        if (isset($map['Originator'])) {
            $model->originator = originator::fromMap($map['Originator']);
        }

        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }

        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
