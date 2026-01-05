<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListLaunchOptionsResponseBody\launchOptionSummaries;

class ListLaunchOptionsResponseBody extends Model
{
    /**
     * @var launchOptionSummaries[]
     */
    public $launchOptionSummaries;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'launchOptionSummaries' => 'LaunchOptionSummaries',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->launchOptionSummaries)) {
            Model::validateArray($this->launchOptionSummaries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->launchOptionSummaries) {
            if (\is_array($this->launchOptionSummaries)) {
                $res['LaunchOptionSummaries'] = [];
                $n1 = 0;
                foreach ($this->launchOptionSummaries as $item1) {
                    $res['LaunchOptionSummaries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LaunchOptionSummaries'])) {
            if (!empty($map['LaunchOptionSummaries'])) {
                $model->launchOptionSummaries = [];
                $n1 = 0;
                foreach ($map['LaunchOptionSummaries'] as $item1) {
                    $model->launchOptionSummaries[$n1] = launchOptionSummaries::fromMap($item1);
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
