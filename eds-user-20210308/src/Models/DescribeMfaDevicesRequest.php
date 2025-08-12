<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;

class DescribeMfaDevicesRequest extends Model
{
    /**
     * @var string
     */
    public $adDomain;

    /**
     * @var string[]
     */
    public $endUserIds;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string[]
     */
    public $serialNumbers;
    protected $_name = [
        'adDomain' => 'AdDomain',
        'endUserIds' => 'EndUserIds',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'serialNumbers' => 'SerialNumbers',
    ];

    public function validate()
    {
        if (\is_array($this->endUserIds)) {
            Model::validateArray($this->endUserIds);
        }
        if (\is_array($this->serialNumbers)) {
            Model::validateArray($this->serialNumbers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adDomain) {
            $res['AdDomain'] = $this->adDomain;
        }

        if (null !== $this->endUserIds) {
            if (\is_array($this->endUserIds)) {
                $res['EndUserIds'] = [];
                $n1 = 0;
                foreach ($this->endUserIds as $item1) {
                    $res['EndUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->serialNumbers) {
            if (\is_array($this->serialNumbers)) {
                $res['SerialNumbers'] = [];
                $n1 = 0;
                foreach ($this->serialNumbers as $item1) {
                    $res['SerialNumbers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdDomain'])) {
            $model->adDomain = $map['AdDomain'];
        }

        if (isset($map['EndUserIds'])) {
            if (!empty($map['EndUserIds'])) {
                $model->endUserIds = [];
                $n1 = 0;
                foreach ($map['EndUserIds'] as $item1) {
                    $model->endUserIds[$n1] = $item1;
                    ++$n1;
                }
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
                $model->serialNumbers = [];
                $n1 = 0;
                foreach ($map['SerialNumbers'] as $item1) {
                    $model->serialNumbers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
