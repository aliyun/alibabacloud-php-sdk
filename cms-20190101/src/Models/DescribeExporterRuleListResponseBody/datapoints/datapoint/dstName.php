<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterRuleListResponseBody\datapoints\datapoint;

use AlibabaCloud\Dara\Model;

class dstName extends Model
{
    /**
     * @var string[]
     */
    public $dstName;
    protected $_name = [
        'dstName' => 'DstName',
    ];

    public function validate()
    {
        if (\is_array($this->dstName)) {
            Model::validateArray($this->dstName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dstName) {
            if (\is_array($this->dstName)) {
                $res['DstName'] = [];
                $n1 = 0;
                foreach ($this->dstName as $item1) {
                    $res['DstName'][$n1] = $item1;
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
        if (isset($map['DstName'])) {
            if (!empty($map['DstName'])) {
                $model->dstName = [];
                $n1 = 0;
                foreach ($map['DstName'] as $item1) {
                    $model->dstName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
