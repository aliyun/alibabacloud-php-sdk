<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetWafFilterResponseBody\filter;

use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafFilterResponseBody\filter\fields\logics;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafFilterResponseBody\filter\fields\selector;
use AlibabaCloud\Tea\Model;

class fields extends Model
{
    /**
     * @example http.request.headers
     *
     * @var string
     */
    public $key;

    /**
     * @example Header
     *
     * @var string
     */
    public $label;

    /**
     * @var logics[]
     */
    public $logics;

    /**
     * @var selector
     */
    public $selector;

    /**
     * @var bool
     */
    public $sub;

    /**
     * @example e.g. Content-Type
     *
     * @var string
     */
    public $subTip;
    protected $_name = [
        'key'      => 'Key',
        'label'    => 'Label',
        'logics'   => 'Logics',
        'selector' => 'Selector',
        'sub'      => 'Sub',
        'subTip'   => 'SubTip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->logics) {
            $res['Logics'] = [];
            if (null !== $this->logics && \is_array($this->logics)) {
                $n = 0;
                foreach ($this->logics as $item) {
                    $res['Logics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->selector) {
            $res['Selector'] = null !== $this->selector ? $this->selector->toMap() : null;
        }
        if (null !== $this->sub) {
            $res['Sub'] = $this->sub;
        }
        if (null !== $this->subTip) {
            $res['SubTip'] = $this->subTip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fields
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Logics'])) {
            if (!empty($map['Logics'])) {
                $model->logics = [];
                $n             = 0;
                foreach ($map['Logics'] as $item) {
                    $model->logics[$n++] = null !== $item ? logics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Selector'])) {
            $model->selector = selector::fromMap($map['Selector']);
        }
        if (isset($map['Sub'])) {
            $model->sub = $map['Sub'];
        }
        if (isset($map['SubTip'])) {
            $model->subTip = $map['SubTip'];
        }

        return $model;
    }
}
