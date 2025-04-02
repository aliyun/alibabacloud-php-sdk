<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\BatchGetFormDataByIdListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\BatchGetFormDataByIdListResponseBody\result\modifyUser;
use AlibabaCloud\SDK\Aliding\V20230426\Models\BatchGetFormDataByIdListResponseBody\result\originator;

class result extends Model
{
    /**
     * @var string
     */
    public $createTimeGMT;

    /**
     * @var string
     */
    public $creatorUserId;

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
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $instanceValue;

    /**
     * @var string
     */
    public $modifiedTimeGMT;

    /**
     * @var string
     */
    public $modifier;

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
    public $serialNumber;

    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'createTimeGMT' => 'CreateTimeGMT',
        'creatorUserId' => 'CreatorUserId',
        'formData' => 'FormData',
        'formInstanceId' => 'FormInstanceId',
        'formUuid' => 'FormUuid',
        'id' => 'Id',
        'instanceValue' => 'InstanceValue',
        'modifiedTimeGMT' => 'ModifiedTimeGMT',
        'modifier' => 'Modifier',
        'modifyUser' => 'ModifyUser',
        'originator' => 'Originator',
        'sequence' => 'Sequence',
        'serialNumber' => 'SerialNumber',
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
        if (null !== $this->createTimeGMT) {
            $res['CreateTimeGMT'] = $this->createTimeGMT;
        }

        if (null !== $this->creatorUserId) {
            $res['CreatorUserId'] = $this->creatorUserId;
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

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->instanceValue) {
            $res['InstanceValue'] = $this->instanceValue;
        }

        if (null !== $this->modifiedTimeGMT) {
            $res['ModifiedTimeGMT'] = $this->modifiedTimeGMT;
        }

        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
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

        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
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
        if (isset($map['CreateTimeGMT'])) {
            $model->createTimeGMT = $map['CreateTimeGMT'];
        }

        if (isset($map['CreatorUserId'])) {
            $model->creatorUserId = $map['CreatorUserId'];
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

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InstanceValue'])) {
            $model->instanceValue = $map['InstanceValue'];
        }

        if (isset($map['ModifiedTimeGMT'])) {
            $model->modifiedTimeGMT = $map['ModifiedTimeGMT'];
        }

        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
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

        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
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
