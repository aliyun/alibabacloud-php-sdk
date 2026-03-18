<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListCredentialProvidersRequest\filter;

class ListCredentialProvidersRequest extends Model
{
    /**
     * @var string[]
     */
    public $credentialProviderIds;

    /**
     * @var string[]
     */
    public $credentialProviderTypes;

    /**
     * @var filter[]
     */
    public $filter;

    /**
     * @var string
     */
    public $instanceId;

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
    public $statuses;
    protected $_name = [
        'credentialProviderIds' => 'CredentialProviderIds',
        'credentialProviderTypes' => 'CredentialProviderTypes',
        'filter' => 'Filter',
        'instanceId' => 'InstanceId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'statuses' => 'Statuses',
    ];

    public function validate()
    {
        if (\is_array($this->credentialProviderIds)) {
            Model::validateArray($this->credentialProviderIds);
        }
        if (\is_array($this->credentialProviderTypes)) {
            Model::validateArray($this->credentialProviderTypes);
        }
        if (\is_array($this->filter)) {
            Model::validateArray($this->filter);
        }
        if (\is_array($this->statuses)) {
            Model::validateArray($this->statuses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentialProviderIds) {
            if (\is_array($this->credentialProviderIds)) {
                $res['CredentialProviderIds'] = [];
                $n1 = 0;
                foreach ($this->credentialProviderIds as $item1) {
                    $res['CredentialProviderIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->credentialProviderTypes) {
            if (\is_array($this->credentialProviderTypes)) {
                $res['CredentialProviderTypes'] = [];
                $n1 = 0;
                foreach ($this->credentialProviderTypes as $item1) {
                    $res['CredentialProviderTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->filter) {
            if (\is_array($this->filter)) {
                $res['Filter'] = [];
                $n1 = 0;
                foreach ($this->filter as $item1) {
                    $res['Filter'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->statuses) {
            if (\is_array($this->statuses)) {
                $res['Statuses'] = [];
                $n1 = 0;
                foreach ($this->statuses as $item1) {
                    $res['Statuses'][$n1] = $item1;
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
        if (isset($map['CredentialProviderIds'])) {
            if (!empty($map['CredentialProviderIds'])) {
                $model->credentialProviderIds = [];
                $n1 = 0;
                foreach ($map['CredentialProviderIds'] as $item1) {
                    $model->credentialProviderIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CredentialProviderTypes'])) {
            if (!empty($map['CredentialProviderTypes'])) {
                $model->credentialProviderTypes = [];
                $n1 = 0;
                foreach ($map['CredentialProviderTypes'] as $item1) {
                    $model->credentialProviderTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Filter'])) {
            if (!empty($map['Filter'])) {
                $model->filter = [];
                $n1 = 0;
                foreach ($map['Filter'] as $item1) {
                    $model->filter[$n1] = filter::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Statuses'])) {
            if (!empty($map['Statuses'])) {
                $model->statuses = [];
                $n1 = 0;
                foreach ($map['Statuses'] as $item1) {
                    $model->statuses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
