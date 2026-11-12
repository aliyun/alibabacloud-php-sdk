<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\InternetBankOpen\V20240612\Models\ListProductReportsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\InternetBankOpen\V20240612\Models\ListProductReportsResponseBody\data\reports;

class data extends Model
{
    /**
     * @var reports[]
     */
    public $reports;
    protected $_name = [
        'reports' => 'Reports',
    ];

    public function validate()
    {
        if (\is_array($this->reports)) {
            Model::validateArray($this->reports);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reports) {
            if (\is_array($this->reports)) {
                $res['Reports'] = [];
                $n1 = 0;
                foreach ($this->reports as $item1) {
                    $res['Reports'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Reports'])) {
            if (!empty($map['Reports'])) {
                $model->reports = [];
                $n1 = 0;
                foreach ($map['Reports'] as $item1) {
                    $model->reports[$n1] = reports::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
