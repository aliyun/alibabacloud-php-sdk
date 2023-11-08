<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDatasResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDatasResponseBody\data\modifyUser;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDatasResponseBody\data\originator;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2018-01-24 11:22:01
     *
     * @var string
     */
    public $createdTimeGMT;

    /**
     * @example 012345
     *
     * @var string
     */
    public $creatorUserId;

    /**
     * @example 1002
     *
     * @var int
     */
    public $dataId;

    /**
     * @var mixed[]
     */
    public $formData;

    /**
     * @example FINST-BNKJDRF
     *
     * @var string
     */
    public $formInstanceId;

    /**
     * @example FORM-EF6Y93URN24F1SCX15VA2P918LPEIJ2H3UFORCJ1
     *
     * @var string
     */
    public $formUuid;

    /**
     * @example {}
     *
     * @var string
     */
    public $instanceValue;

    /**
     * @example FORM-EF6Y93URN24F1SCX15VA2P918LPEIJ2H3UFORCJ1
     *
     * @var string
     */
    public $modelUuid;

    /**
     * @example 2018-01-24 11:22:01
     *
     * @var string
     */
    public $modifiedTimeGMT;

    /**
     * @example 012345
     *
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
     * @example 1
     *
     * @var string
     */
    public $sequence;

    /**
     * @example 231008101012015353
     *
     * @var string
     */
    public $serialNo;

    /**
     * @var string
     */
    public $title;

    /**
     * @example 3
     *
     * @var int
     */
    public $version;
    protected $_name = [
        'createdTimeGMT'  => 'CreatedTimeGMT',
        'creatorUserId'   => 'CreatorUserId',
        'dataId'          => 'DataId',
        'formData'        => 'FormData',
        'formInstanceId'  => 'FormInstanceId',
        'formUuid'        => 'FormUuid',
        'instanceValue'   => 'InstanceValue',
        'modelUuid'       => 'ModelUuid',
        'modifiedTimeGMT' => 'ModifiedTimeGMT',
        'modifierUserId'  => 'ModifierUserId',
        'modifyUser'      => 'ModifyUser',
        'originator'      => 'Originator',
        'sequence'        => 'Sequence',
        'serialNo'        => 'SerialNo',
        'title'           => 'Title',
        'version'         => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['FormData'] = $this->formData;
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
            $res['ModifyUser'] = null !== $this->modifyUser ? $this->modifyUser->toMap() : null;
        }
        if (null !== $this->originator) {
            $res['Originator'] = null !== $this->originator ? $this->originator->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return data
     */
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
            $model->formData = $map['FormData'];
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
