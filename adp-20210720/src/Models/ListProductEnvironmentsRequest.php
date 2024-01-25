<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\SDK\Adp\V20210720\Models\ListProductEnvironmentsRequest\options;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListProductEnvironmentsRequest\platforms;
use AlibabaCloud\Tea\Model;

class ListProductEnvironmentsRequest extends Model
{
    /**
     * @var string
     */
    public $compatibleProductVersionUID;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var options
     */
    public $options;

    /**
     * @var platforms[]
     */
    public $platforms;

    /**
     * @var string
     */
    public $productVersionSpecUID;

    /**
     * @var string
     */
    public $productVersionUID;
    protected $_name = [
        'compatibleProductVersionUID' => 'compatibleProductVersionUID',
        'envType'                     => 'envType',
        'options'                     => 'options',
        'platforms'                   => 'platforms',
        'productVersionSpecUID'       => 'productVersionSpecUID',
        'productVersionUID'           => 'productVersionUID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compatibleProductVersionUID) {
            $res['compatibleProductVersionUID'] = $this->compatibleProductVersionUID;
        }
        if (null !== $this->envType) {
            $res['envType'] = $this->envType;
        }
        if (null !== $this->options) {
            $res['options'] = null !== $this->options ? $this->options->toMap() : null;
        }
        if (null !== $this->platforms) {
            $res['platforms'] = [];
            if (null !== $this->platforms && \is_array($this->platforms)) {
                $n = 0;
                foreach ($this->platforms as $item) {
                    $res['platforms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->productVersionSpecUID) {
            $res['productVersionSpecUID'] = $this->productVersionSpecUID;
        }
        if (null !== $this->productVersionUID) {
            $res['productVersionUID'] = $this->productVersionUID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProductEnvironmentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['compatibleProductVersionUID'])) {
            $model->compatibleProductVersionUID = $map['compatibleProductVersionUID'];
        }
        if (isset($map['envType'])) {
            $model->envType = $map['envType'];
        }
        if (isset($map['options'])) {
            $model->options = options::fromMap($map['options']);
        }
        if (isset($map['platforms'])) {
            if (!empty($map['platforms'])) {
                $model->platforms = [];
                $n                = 0;
                foreach ($map['platforms'] as $item) {
                    $model->platforms[$n++] = null !== $item ? platforms::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['productVersionSpecUID'])) {
            $model->productVersionSpecUID = $map['productVersionSpecUID'];
        }
        if (isset($map['productVersionUID'])) {
            $model->productVersionUID = $map['productVersionUID'];
        }

        return $model;
    }
}
