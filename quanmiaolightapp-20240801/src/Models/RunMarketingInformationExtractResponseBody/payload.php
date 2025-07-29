<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunMarketingInformationExtractResponseBody;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunMarketingInformationExtractResponseBody\payload\output;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunMarketingInformationExtractResponseBody\payload\usage;
use AlibabaCloud\Tea\Model;

class payload extends Model
{
    /**
     * @var output
     */
    public $output;

    /**
     * @var usage
     */
    public $usage;
    protected $_name = [
        'output' => 'output',
        'usage' => 'usage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->output) {
            $res['output'] = null !== $this->output ? $this->output->toMap() : null;
        }
        if (null !== $this->usage) {
            $res['usage'] = null !== $this->usage ? $this->usage->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return payload
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['output'])) {
            $model->output = output::fromMap($map['output']);
        }
        if (isset($map['usage'])) {
            $model->usage = usage::fromMap($map['usage']);
        }

        return $model;
    }
}
