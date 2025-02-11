<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Dara\Model;

class ListListenerCertificatesRequest extends Model
{
    /**
     * @var string[]
     */
    public $certificateIds;
    /**
     * @var string
     */
    public $certificateType;
    /**
     * @var string
     */
    public $listenerId;
    /**
     * @var int
     */
    public $maxResults;
    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'certificateIds'  => 'CertificateIds',
        'certificateType' => 'CertificateType',
        'listenerId'      => 'ListenerId',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
    ];

    public function validate()
    {
        if (\is_array($this->certificateIds)) {
            Model::validateArray($this->certificateIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certificateIds) {
            if (\is_array($this->certificateIds)) {
                $res['CertificateIds'] = [];
                $n1                    = 0;
                foreach ($this->certificateIds as $item1) {
                    $res['CertificateIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->certificateType) {
            $res['CertificateType'] = $this->certificateType;
        }

        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['CertificateIds'])) {
            if (!empty($map['CertificateIds'])) {
                $model->certificateIds = [];
                $n1                    = 0;
                foreach ($map['CertificateIds'] as $item1) {
                    $model->certificateIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CertificateType'])) {
            $model->certificateType = $map['CertificateType'];
        }

        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
