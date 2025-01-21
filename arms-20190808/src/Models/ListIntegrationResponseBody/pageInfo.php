<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListIntegrationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListIntegrationResponseBody\pageInfo\integrations;

class pageInfo extends Model
{
    /**
     * @var integrations[]
     */
    public $integrations;
    /**
     * @var int
     */
    public $page;
    /**
     * @var int
     */
    public $size;
    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'integrations' => 'Integrations',
        'page'         => 'Page',
        'size'         => 'Size',
        'total'        => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->integrations)) {
            Model::validateArray($this->integrations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->integrations) {
            if (\is_array($this->integrations)) {
                $res['Integrations'] = [];
                $n1                  = 0;
                foreach ($this->integrations as $item1) {
                    $res['Integrations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Integrations'])) {
            if (!empty($map['Integrations'])) {
                $model->integrations = [];
                $n1                  = 0;
                foreach ($map['Integrations'] as $item1) {
                    $model->integrations[$n1++] = integrations::fromMap($item1);
                }
            }
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
