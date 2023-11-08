<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDataSecondGenerationNoTableFieldResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDataSecondGenerationNoTableFieldResponseBody\data\modifyUser;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDataSecondGenerationNoTableFieldResponseBody\data\originator;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2021-05-01 10:10:10
     *
     * @var string
     */
    public $createTimeGMT;

    /**
     * @example 012345
     *
     * @var string
     */
    public $creatorUserId;

    /**
     * @var mixed[]
     */
    public $formData;

    /**
     * @example FINST-xxxx
     *
     * @var string
     */
    public $formInstanceId;

    /**
     * @example FORM-xxxx
     *
     * @var string
     */
    public $formUuid;

    /**
     * @example 54114
     *
     * @var int
     */
    public $id;

    /**
     * @example {}
     *
     * @var string
     */
    public $instanceValue;

    /**
     * @example 2021-05-01 10:10:10
     *
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
     * @example 1
     *
     * @var string
     */
    public $sequence;

    /**
     * @example 7CE737P1SS
     *
     * @var string
     */
    public $serialNumber;

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
        'createTimeGMT'   => 'CreateTimeGMT',
        'creatorUserId'   => 'CreatorUserId',
        'formData'        => 'FormData',
        'formInstanceId'  => 'FormInstanceId',
        'formUuid'        => 'FormUuid',
        'id'              => 'Id',
        'instanceValue'   => 'InstanceValue',
        'modifiedTimeGMT' => 'ModifiedTimeGMT',
        'modifier'        => 'Modifier',
        'modifyUser'      => 'ModifyUser',
        'originator'      => 'Originator',
        'sequence'        => 'Sequence',
        'serialNumber'    => 'SerialNumber',
        'title'           => 'Title',
        'version'         => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTimeGMT) {
            $res['CreateTimeGMT'] = $this->createTimeGMT;
        }
        if (null !== $this->creatorUserId) {
            $res['CreatorUserId'] = $this->creatorUserId;
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
            $res['ModifyUser'] = null !== $this->modifyUser ? $this->modifyUser->toMap() : null;
        }
        if (null !== $this->originator) {
            $res['Originator'] = null !== $this->originator ? $this->originator->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return data
     */
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
            $model->formData = $map['FormData'];
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
