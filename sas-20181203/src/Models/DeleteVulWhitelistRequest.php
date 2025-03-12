<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DeleteVulWhitelistRequest extends Model
{
    /**
     * @description The ID of the whitelist.
     *
     * >  To delete a vulnerability whitelist, you must provide the ID of the whitelist. You can call the [DescribeVulWhitelist](~~DescribeVulWhitelist~~) operation to query the IDs of whitelists.
     * @example 131231
     *
     * @var string
     */
    public $id;

    /**
     * @description The information about the whitelist. The value is a JSON string that contains the following fields:
     *
     *   **Name**: the name of the vulnerability.
     *
     *   **Type**: the type of the vulnerability. Valid values:
     *
     *   **cve**: Linux software vulnerability
     *   **sys**: Windows system vulnerability
     *   **cms**: Web-CMS vulnerability
     *   **app**: application vulnerability
     *   **emg**: urgent vulnerability
     *
     *   **AliasName**: the alias of the vulnerability.
     *
     * @example [
     * ]
     * @var string
     */
    public $whitelist;
    protected $_name = [
        'id'        => 'Id',
        'whitelist' => 'Whitelist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->whitelist) {
            $res['Whitelist'] = $this->whitelist;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteVulWhitelistRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Whitelist'])) {
            $model->whitelist = $map['Whitelist'];
        }

        return $model;
    }
}
