<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListExternalApplicationsResponseBody\externalApplications;

class ListExternalApplicationsResponseBody extends Model
{
    /**
     * @var externalApplications
     */
    public $externalApplications;

    /**
     * @var bool
     */
    public $isTruncated;

    /**
     * @var string
     */
    public $marker;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'externalApplications' => 'ExternalApplications',
        'isTruncated' => 'IsTruncated',
        'marker' => 'Marker',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->externalApplications) {
            $this->externalApplications->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->externalApplications) {
            $res['ExternalApplications'] = null !== $this->externalApplications ? $this->externalApplications->toArray($noStream) : $this->externalApplications;
        }

        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }

        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
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
        if (isset($map['ExternalApplications'])) {
            $model->externalApplications = externalApplications::fromMap($map['ExternalApplications']);
        }

        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }

        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
