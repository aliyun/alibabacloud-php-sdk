<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeWhitelistTemplateResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeWhitelistTemplateResponseBody\data\template;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var template
     */
    public $template;
    protected $_name = [
        'template' => 'Template',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->template) {
            $res['Template'] = null !== $this->template ? $this->template->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Template'])) {
            $model->template = template::fromMap($map['Template']);
        }

        return $model;
    }
}
