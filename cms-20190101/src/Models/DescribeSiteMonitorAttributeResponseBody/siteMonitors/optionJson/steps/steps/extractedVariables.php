<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\steps\steps;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\steps\steps\extractedVariables\extractedVariables;

class extractedVariables extends Model
{
    /**
     * @var extractedVariables[]
     */
    public $extractedVariables;
    protected $_name = [
        'extractedVariables' => 'extracted_variables',
    ];

    public function validate()
    {
        if (\is_array($this->extractedVariables)) {
            Model::validateArray($this->extractedVariables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extractedVariables) {
            if (\is_array($this->extractedVariables)) {
                $res['extracted_variables'] = [];
                $n1 = 0;
                foreach ($this->extractedVariables as $item1) {
                    $res['extracted_variables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['extracted_variables'])) {
            if (!empty($map['extracted_variables'])) {
                $model->extractedVariables = [];
                $n1 = 0;
                foreach ($map['extracted_variables'] as $item1) {
                    $model->extractedVariables[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
