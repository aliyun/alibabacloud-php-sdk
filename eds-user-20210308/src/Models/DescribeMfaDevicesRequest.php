<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class DescribeMfaDevicesRequest extends Model
{
    /**
     * @description This parameter is unavailable.
     *
     * @example test
     *
     * @var string[]
     */
    public $endUserIds;

    /**
     * @description The list of username of convenience users.
     *
     * @example 100
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The time when the virtual MFA device was enabled. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The time when a locked virtual MFA device is automatically unlocked. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example c2d9ae94-a64b-4a0d-8024-9519ca50****
     *
     * @var string[]
     */
    public $serialNumbers;
    protected $_name = [
        'endUserIds'    => 'EndUserIds',
        'maxResults'    => 'MaxResults',
        'nextToken'     => 'NextToken',
        'serialNumbers' => 'SerialNumbers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endUserIds) {
            $res['EndUserIds'] = $this->endUserIds;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->serialNumbers) {
            $res['SerialNumbers'] = $this->serialNumbers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMfaDevicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndUserIds'])) {
            if (!empty($map['EndUserIds'])) {
                $model->endUserIds = $map['EndUserIds'];
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['SerialNumbers'])) {
            if (!empty($map['SerialNumbers'])) {
                $model->serialNumbers = $map['SerialNumbers'];
            }
        }

        return $model;
    }
}
