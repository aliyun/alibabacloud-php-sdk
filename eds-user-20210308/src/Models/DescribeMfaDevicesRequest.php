<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class DescribeMfaDevicesRequest extends Model
{
    /**
     * @var string
     */
    public $adDomain;

    /**
     * @description The list of username of convenience users.
     *
     * @example test
     *
     * @var string[]
     */
    public $endUserIds;

    /**
     * @description The maximum number of entries to return. Valid values: 1 to 500.
     *
     * Default value: 100.
     * @example 100
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The query token. Set the value to the NextToken value returned in the last call.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The list of serial numbers of the virtual MFA devices.
     *
     * @example c2d9ae94-a64b-4a0d-8024-9519ca50****
     *
     * @var string[]
     */
    public $serialNumbers;
    protected $_name = [
        'adDomain'      => 'AdDomain',
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
        if (null !== $this->adDomain) {
            $res['AdDomain'] = $this->adDomain;
        }
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
        if (isset($map['AdDomain'])) {
            $model->adDomain = $map['AdDomain'];
        }
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
