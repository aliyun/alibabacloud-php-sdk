<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeUuidsByVulNamesRequest extends Model
{
    /**
     * @description Specifies whether the vulnerability is handled. Valid values:
     *
     **y**: The vulnerability is handled. **n**: The vulnerability is not handled.
     *
     * @example n
     *
     * @var string
     */
    public $dealed;

    /**
     * @description The name of the search field that is used to query containers.
     *
     * @example namespace
     *
     * @var string
     */
    public $fieldName;

    /**
     * @description The value of the search field that is used to query containers.
     *
     * @example cas-adad-qeqwe
     *
     * @var string
     */
    public $fieldValue;

    /**
     * @description The ID of the asset group.
     *
     * @example 11286014
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The severity of the vulnerability. Separate multiple severities with commas (,). Valid values:
     *
     *   **high**
     *   **medium**
     *   **low**
     *
     * @example high,low
     *
     * @var string
     */
    public $level;

    /**
     * @description The priority based on which the vulnerability is fixed. Separate multiple priorities with commas (,). Valid values:
     *
     *   **asap**: high
     *   **later**: medium
     *   **nntf**: low
     *
     * @example asap,later,nntf
     *
     * @var string
     */
    public $necessity;

    /**
     * @description The remarks for the asset affected by the vulnerability. The value can be the private IP address, public IP address, or name of the asset. Fuzzy match is supported.
     *
     * @example 10.7.
     *
     * @var string
     */
    public $remark;

    /**
     * @description The tags that are used to search for the vulnerability.
     *
     * @example oval
     *
     * @var string
     */
    public $searchTags;

    /**
     * @description The status of the vulnerability. Separate multiple states with commas (,). Valid values:
     *
     *   **1**: unfixed
     *   **4**: being fixed
     *   **7**: fixed
     *
     * @example 1,4
     *
     * @var string
     */
    public $statusList;

    /**
     * @description The tag of the vulnerability.
     *
     * @example oval
     *
     * @var string
     */
    public $tag;

    /**
     * @description The type of the query condition. Valid values:
     *
     *   **containerId**: the ID of the container
     *   **uuid**: the ID of the asset
     *
     * @example uuid
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The type of the vulnerability. Valid values:
     *
     *   **cve**: Linux software vulnerability
     *   **sys**: Windows system vulnerability
     *   **cms**: Web-CMS vulnerability
     *   **app**: application vulnerability
     *   **emg**: urgent vulnerability
     *   **sca**: vulnerability that is detected based on software component analysis
     *
     * @example cve
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of the virtual private cloud (VPC) in which the vulnerability is detected. Separate multiple IDs with commas (,).
     *
     * @example vpc-uf6ssrvbrwe37ekw****,vpc-bp1aevy8sofi8mh1q****
     *
     * @var string
     */
    public $vpcInstanceIds;

    /**
     * @description An array that consists of the names of vulnerabilities.
     *
     * >  You can call the [DescribeGroupedVul](~~DescribeGroupedVul~~) operation to obtain the names of vulnerabilities.
     * @var string[]
     */
    public $vulNames;
    protected $_name = [
        'dealed'         => 'Dealed',
        'fieldName'      => 'FieldName',
        'fieldValue'     => 'FieldValue',
        'groupId'        => 'GroupId',
        'lang'           => 'Lang',
        'level'          => 'Level',
        'necessity'      => 'Necessity',
        'remark'         => 'Remark',
        'searchTags'     => 'SearchTags',
        'statusList'     => 'StatusList',
        'tag'            => 'Tag',
        'targetType'     => 'TargetType',
        'type'           => 'Type',
        'vpcInstanceIds' => 'VpcInstanceIds',
        'vulNames'       => 'VulNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }
        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }
        if (null !== $this->fieldValue) {
            $res['FieldValue'] = $this->fieldValue;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->necessity) {
            $res['Necessity'] = $this->necessity;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->searchTags) {
            $res['SearchTags'] = $this->searchTags;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vpcInstanceIds) {
            $res['VpcInstanceIds'] = $this->vpcInstanceIds;
        }
        if (null !== $this->vulNames) {
            $res['VulNames'] = $this->vulNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUuidsByVulNamesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }
        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }
        if (isset($map['FieldValue'])) {
            $model->fieldValue = $map['FieldValue'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Necessity'])) {
            $model->necessity = $map['Necessity'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['SearchTags'])) {
            $model->searchTags = $map['SearchTags'];
        }
        if (isset($map['StatusList'])) {
            $model->statusList = $map['StatusList'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VpcInstanceIds'])) {
            $model->vpcInstanceIds = $map['VpcInstanceIds'];
        }
        if (isset($map['VulNames'])) {
            if (!empty($map['VulNames'])) {
                $model->vulNames = $map['VulNames'];
            }
        }

        return $model;
    }
}
