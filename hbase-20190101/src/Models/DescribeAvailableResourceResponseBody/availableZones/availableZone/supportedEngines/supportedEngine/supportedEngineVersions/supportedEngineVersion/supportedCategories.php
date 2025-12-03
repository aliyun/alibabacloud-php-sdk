<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategories\supportedCategories;

class supportedCategories extends Model
{
    /**
     * @var supportedCategories[]
     */
    public $supportedCategories;
    protected $_name = [
        'supportedCategories' => 'SupportedCategories',
    ];

    public function validate()
    {
        if (\is_array($this->supportedCategories)) {
            Model::validateArray($this->supportedCategories);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedCategories) {
            if (\is_array($this->supportedCategories)) {
                $res['SupportedCategories'] = [];
                $n1 = 0;
                foreach ($this->supportedCategories as $item1) {
                    $res['SupportedCategories'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SupportedCategories'])) {
            if (!empty($map['SupportedCategories'])) {
                $model->supportedCategories = [];
                $n1 = 0;
                foreach ($map['SupportedCategories'] as $item1) {
                    $model->supportedCategories[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
