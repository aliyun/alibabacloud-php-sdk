<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListComponentIndicesResponseBody\result\content;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListComponentIndicesResponseBody\result\content\template\settings;

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
        if (null !== $this->settings) {
            $this->settings->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->settings) {
            $res['settings'] = null !== $this->settings ? $this->settings->toArray($noStream) : $this->settings;
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
        if (isset($map['settings'])) {
            $model->settings = settings::fromMap($map['settings']);
        }

        return $model;
    }
}
