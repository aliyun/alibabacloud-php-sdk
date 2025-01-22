<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListPublicTemplateRegistrationsResponseBody\registrations;

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
        if (\is_array($this->registrations)) {
            Model::validateArray($this->registrations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->registrations) {
            if (\is_array($this->registrations)) {
                $res['Registrations'] = [];
                $n1                   = 0;
                foreach ($this->registrations as $item1) {
                    $res['Registrations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Registrations'])) {
            if (!empty($map['Registrations'])) {
                $model->registrations = [];
                $n1                   = 0;
                foreach ($map['Registrations'] as $item1) {
                    $model->registrations[$n1++] = registrations::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
