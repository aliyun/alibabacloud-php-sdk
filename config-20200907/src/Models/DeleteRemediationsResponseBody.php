<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\DeleteRemediationsResponseBody\remediationDeleteResults;
use AlibabaCloud\Tea\Model;

class DeleteRemediationsResponseBody extends Model
{
    /**
     * @description The returned result.
     *
     * @var remediationDeleteResults[]
     */
    public $remediationDeleteResults;

    /**
     * @description The request ID.
     *
     * @example 4BE28FB1-616A-5586-82E4-F34FB2AF7441
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'remediationDeleteResults' => 'RemediationDeleteResults',
        'requestId'                => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remediationDeleteResults) {
            $res['RemediationDeleteResults'] = [];
            if (null !== $this->remediationDeleteResults && \is_array($this->remediationDeleteResults)) {
                $n = 0;
                foreach ($this->remediationDeleteResults as $item) {
                    $res['RemediationDeleteResults'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DeleteRemediationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RemediationDeleteResults'])) {
            if (!empty($map['RemediationDeleteResults'])) {
                $model->remediationDeleteResults = [];
                $n                               = 0;
                foreach ($map['RemediationDeleteResults'] as $item) {
                    $model->remediationDeleteResults[$n++] = null !== $item ? remediationDeleteResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
