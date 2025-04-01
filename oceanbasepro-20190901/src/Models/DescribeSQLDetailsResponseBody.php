<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLDetailsResponseBody\SQLDetails;

class DescribeSQLDetailsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var SQLDetails[]
     */
    public $SQLDetails;
    protected $_name = [
        'requestId' => 'RequestId',
        'SQLDetails' => 'SQLDetails',
    ];

    public function validate()
    {
        if (\is_array($this->SQLDetails)) {
            Model::validateArray($this->SQLDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->SQLDetails) {
            if (\is_array($this->SQLDetails)) {
                $res['SQLDetails'] = [];
                $n1 = 0;
                foreach ($this->SQLDetails as $item1) {
                    $res['SQLDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SQLDetails'])) {
            if (!empty($map['SQLDetails'])) {
                $model->SQLDetails = [];
                $n1 = 0;
                foreach ($map['SQLDetails'] as $item1) {
                    $model->SQLDetails[$n1++] = SQLDetails::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
