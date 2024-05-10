<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeVulDetailsRequest extends Model
{
    /**
     * @description The vulnerability announcement.
     *
     * @example RHSA-2019:3197-Important: sudo security update
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * This parameter is required.
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The name of the vulnerability.
     *
     * This parameter is required.
     * @example SCA:ACSV-2020-052801
     *
     * @var string
     */
    public $name;

    /**
     * @description The Alibaba Cloud account ID of the member in the resource directory.
     *
     * >  You can call the [DescribeMonitorAccounts](~~DescribeMonitorAccounts~~) operation to obtain the IDs.
     * @example 127608589417****
     *
     * @var int
     */
    public $resourceDirectoryAccountId;

    /**
     * @description The type of the vulnerability. Valid values:
     *
     *   **cve**: Linux software vulnerability
     *   **sys**: Windows system vulnerability
     *   **cms**: Web-CMS vulnerability
     *   **app**: application vulnerabilitiy
     *   **emg**: urgent vulnerability
     *   **sca**: vulnerability that is detected based on software component analysis
     *
     * This parameter is required.
     * @example sca
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'aliasName'                  => 'AliasName',
        'lang'                       => 'Lang',
        'name'                       => 'Name',
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'type'                       => 'Type',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVulDetailsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
