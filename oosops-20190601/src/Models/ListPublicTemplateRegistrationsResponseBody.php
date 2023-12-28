<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models;

use AlibabaCloud\SDK\Oosops\V20190601\Models\ListPublicTemplateRegistrationsResponseBody\registrations;
use AlibabaCloud\Tea\Model;

class ListPublicTemplateRegistrationsResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var registrations[]
     */
    public $registrations;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'maxResults'    => 'MaxResults',
        'nextToken'     => 'NextToken',
        'registrations' => 'Registrations',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->registrations) {
            $res['Registrations'] = [];
            if (null !== $this->registrations && \is_array($this->registrations)) {
                $n = 0;
                foreach ($this->registrations as $item) {
                    $res['Registrations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPublicTemplateRegistrationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Registrations'])) {
            if (!empty($map['Registrations'])) {
                $model->registrations = [];
                $n                    = 0;
                foreach ($map['Registrations'] as $item) {
                    $model->registrations[$n++] = null !== $item ? registrations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
