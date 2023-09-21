<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ExportVulRequest extends Model
{
    /**
     * @description The name of the vulnerability.
     *
     * @example RHSA-2019:3197-Important: sudo security update
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description The additional type of the vulnerabilities. You need to specify this parameter when you query application vulnerabilities. If you set the Type parameter to app, you must specify this parameter. Set the value to **sca**.
     *
     * > If this parameter is set to **sca**, **application vulnerabilities** and the **vulnerabilities that are detected based on software component analysis** are queried. If you do not specify this parameter, only application vulnerabilities are queried.
     * @example sca
     *
     * @var string
     */
    public $attachTypes;

    /**
     * @var string
     */
    public $cveId;

    /**
     * @description Specifies whether the vulnerability is fixed. Valid values:
     *
     *   **y**: The vulnerability is fixed.
     *   **n**: The vulnerability is not fixed.
     *
     * @example n
     *
     * @var string
     */
    public $dealed;

    /**
     * @description The server group ID of the server on which the vulnerabilities are detected.
     *
     * > You can call the [DescribeAllGroups](~~DescribeAllGroups~~) operation to query the IDs of server groups.
     * @example 8834224
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The priority to fix the vulnerability. Separate multiple priorities with commas (,). Valid values:
     *
     *   **asap**: high
     *   **later**: medium
     *   **nntf**: low
     *
     * @example asap
     *
     * @var string
     */
    public $necessity;

    /**
     * @description The tag that is used to search for the vulnerabilities. Valid values:
     *
     *   Restart required
     *   Remote exploitation
     *   Exploit exists
     *   Exploitable
     *   Privilege escalation
     *   Code execution
     *
     * @example Restart required
     *
     * @var string
     */
    public $searchTags;

    /**
     * @description The type of the vulnerability that you want to export. Valid values:
     *
     *   **cve**: Linux software vulnerability
     *   **sys**: Windows system vulnerability
     *   **cms**: Web-CMS vulnerability
     *   **app**: application vulnerability
     *   **emg**: urgent vulnerability
     *
     * @example app
     *
     * @var string
     */
    public $type;

    /**
     * @description The UUID of the server on which the vulnerabilities are detected. Separate multiple UUIDs with commas (,).
     *
     * @example 1587bedb-fdb4-48c4-9330-****
     *
     * @var string
     */
    public $uuids;

    /**
     * @description The ID of the virtual private cloud (VPC) in which the vulnerabilities are detected. Separate multiple IDs with commas (,).
     *
     * > You can call the [DescribeVpcList](~~DescribeVpcList~~) operation to query the IDs of VPCs.
     * @example ins-133****,ins-5414****
     *
     * @var string
     */
    public $vpcInstanceIds;
    protected $_name = [
        'aliasName'      => 'AliasName',
        'attachTypes'    => 'AttachTypes',
        'cveId'          => 'CveId',
        'dealed'         => 'Dealed',
        'groupId'        => 'GroupId',
        'lang'           => 'Lang',
        'necessity'      => 'Necessity',
        'searchTags'     => 'SearchTags',
        'type'           => 'Type',
        'uuids'          => 'Uuids',
        'vpcInstanceIds' => 'VpcInstanceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->attachTypes) {
            $res['AttachTypes'] = $this->attachTypes;
        }
        if (null !== $this->cveId) {
            $res['CveId'] = $this->cveId;
        }
        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->necessity) {
            $res['Necessity'] = $this->necessity;
        }
        if (null !== $this->searchTags) {
            $res['SearchTags'] = $this->searchTags;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }
        if (null !== $this->vpcInstanceIds) {
            $res['VpcInstanceIds'] = $this->vpcInstanceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportVulRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['AttachTypes'])) {
            $model->attachTypes = $map['AttachTypes'];
        }
        if (isset($map['CveId'])) {
            $model->cveId = $map['CveId'];
        }
        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Necessity'])) {
            $model->necessity = $map['Necessity'];
        }
        if (isset($map['SearchTags'])) {
            $model->searchTags = $map['SearchTags'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }
        if (isset($map['VpcInstanceIds'])) {
            $model->vpcInstanceIds = $map['VpcInstanceIds'];
        }

        return $model;
    }
}
