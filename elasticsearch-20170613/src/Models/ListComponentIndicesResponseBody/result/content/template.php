<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListComponentIndicesResponseBody\result\content;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListComponentIndicesResponseBody\result\content\template\settings;
use AlibabaCloud\Tea\Model;

class template extends Model
{
    /**
     * @var settings
     */
    public $settings;
    protected $_name = [
        'settings' => 'settings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->settings) {
            $res['settings'] = null !== $this->settings ? $this->settings->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return template
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['settings'])) {
            $model->settings = settings::fromMap($map['settings']);
        }

        return $model;
    }
}
