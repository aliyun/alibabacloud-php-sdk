<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class RemoveEntriesFromAclRequest extends Model
{
    /**
     * @description The ACL ID.
     *
     * @example nacl-hp34s2h0xx1ht4nwo****
     *
     * @var string
     */
    public $aclId;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * > If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, and service limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false** (default): performs a dry run and performs the actual request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The entries that you want to remove. You can remove up to 20 entries in each call.
     *
     * @var string[]
     */
    public $entries;
    protected $_name = [
        'aclId'       => 'AclId',
        'clientToken' => 'ClientToken',
        'dryRun'      => 'DryRun',
        'entries'     => 'Entries',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->entries) {
            $res['Entries'] = $this->entries;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveEntriesFromAclRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['Entries'])) {
            if (!empty($map['Entries'])) {
                $model->entries = $map['Entries'];
            }
        }

        return $model;
    }
}
