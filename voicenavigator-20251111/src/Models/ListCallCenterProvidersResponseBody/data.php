<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListCallCenterProvidersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListCallCenterProvidersResponseBody\data\providers;

class data extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var providers[]
     */
    public $providers;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'providers' => 'Providers',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->providers)) {
            Model::validateArray($this->providers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->providers) {
            if (\is_array($this->providers)) {
                $res['Providers'] = [];
                $n1 = 0;
                foreach ($this->providers as $item1) {
                    $res['Providers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Providers'])) {
            if (!empty($map['Providers'])) {
                $model->providers = [];
                $n1 = 0;
                foreach ($map['Providers'] as $item1) {
                    $model->providers[$n1] = providers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
