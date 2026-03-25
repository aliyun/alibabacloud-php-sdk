<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListImportableKMSSecretsForHostResponseBody\secrets;

class ListImportableKMSSecretsForHostResponseBody extends Model
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
     * @var string
     */
    public $requestId;

    /**
     * @var secrets[]
     */
    public $secrets;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'secrets' => 'Secrets',
    ];

    public function validate()
    {
        if (\is_array($this->secrets)) {
            Model::validateArray($this->secrets);
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->secrets) {
            if (\is_array($this->secrets)) {
                $res['Secrets'] = [];
                $n1 = 0;
                foreach ($this->secrets as $item1) {
                    $res['Secrets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Secrets'])) {
            if (!empty($map['Secrets'])) {
                $model->secrets = [];
                $n1 = 0;
                foreach ($map['Secrets'] as $item1) {
                    $model->secrets[$n1] = secrets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
