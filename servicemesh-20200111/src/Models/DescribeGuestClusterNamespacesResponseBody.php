<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;

class DescribeGuestClusterNamespacesResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $nsLabels;

    /**
     * @var string[]
     */
    public $nsList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nsLabels' => 'NsLabels',
        'nsList' => 'NsList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->nsLabels)) {
            Model::validateArray($this->nsLabels);
        }
        if (\is_array($this->nsList)) {
            Model::validateArray($this->nsList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nsLabels) {
            if (\is_array($this->nsLabels)) {
                $res['NsLabels'] = [];
                foreach ($this->nsLabels as $key1 => $value1) {
                    $res['NsLabels'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->nsList) {
            if (\is_array($this->nsList)) {
                $res['NsList'] = [];
                $n1 = 0;
                foreach ($this->nsList as $item1) {
                    $res['NsList'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['NsLabels'])) {
            if (!empty($map['NsLabels'])) {
                $model->nsLabels = [];
                foreach ($map['NsLabels'] as $key1 => $value1) {
                    $model->nsLabels[$key1] = $value1;
                }
            }
        }

        if (isset($map['NsList'])) {
            if (!empty($map['NsList'])) {
                $model->nsList = [];
                $n1 = 0;
                foreach ($map['NsList'] as $item1) {
                    $model->nsList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
