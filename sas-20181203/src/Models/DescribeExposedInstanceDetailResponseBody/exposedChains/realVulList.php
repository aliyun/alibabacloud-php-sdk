<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceDetailResponseBody\exposedChains;

use AlibabaCloud\Tea\Model;

class realVulList extends Model
{
    /**
     * @description Queries the details about a specified server that is exposed on the Internet.
     *
     * @example RHSA-2022:0274-Important: polkit pkexec Local Privilege Escalation Vulnerability(CVE-2021-4034)
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description DescribeExposedInstanceDetail
     *
     * @example SCA:ACSV-2020-052801
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example asap
     *
     * @var string
     */
    public $necessity;

    /**
     * @description The resource from which the server is exposed. Valid values:
     *
     *   **INTERNET_IP**: the public IP address of an Elastic Compute Service (ECS) instance
     *   **SLB**: the public IP address of a Server Load Balancer (SLB) instance
     *   **EIP**: an elastic IP address (EIP)
     *   **DNAT**: the NAT gateway that connects to the Internet by using the DNAT feature
     *
     * @example sca
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of the server.
     *
     * @example 4f9ce097-4a7d-48fe-baef-6960e5b6****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'aliasName' => 'AliasName',
        'name'      => 'Name',
        'necessity' => 'Necessity',
        'type'      => 'Type',
        'uuid'      => 'Uuid',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->necessity) {
            $res['Necessity'] = $this->necessity;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return realVulList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Necessity'])) {
            $model->necessity = $map['Necessity'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
