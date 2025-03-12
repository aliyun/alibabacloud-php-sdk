<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyOpenLogShipperRequest extends Model
{
    /**
     * @description The ID of the request source. Default value: **aegis**. Valid values:
     *
     *   **aegis**: Server Guard
     *   **sas**: Security Center
     *
     * >  If you use Server Guard, set the value to **aegis**. If you use Security Center, set the value to **sas**.
     * @example sas
     *
     * @var string
     */
    public $from;

    /**
     * @description The Alibaba Cloud account ID of the member in the resource directory.
     *
     * >  You can call the [DescribeMonitorAccounts](~~DescribeMonitorAccounts~~) operation to obtain the IDs.
     * @example 127608589417****
     *
     * @var int
     */
    public $resourceDirectoryAccountId;
    protected $_name = [
        'from'                       => 'From',
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyOpenLogShipperRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
        }

        return $model;
    }
}
