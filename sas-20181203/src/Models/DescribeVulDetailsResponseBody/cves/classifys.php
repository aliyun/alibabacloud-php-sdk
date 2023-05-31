<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulDetailsResponseBody\cves;

use AlibabaCloud\Tea\Model;

class classifys extends Model
{
    /**
     * @description The type of the vulnerability.
     *
     * @example remote_code_execution
     *
     * @var string
     */
    public $classify;

    /**
     * @description The URL of the demo video for the vulnerability.
     *
     * @example https://example.com
     *
     * @var string
     */
    public $demoVideoUrl;

    /**
     * @description The description of the vulnerability type.
     *
     * @example Remote code execution
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'classify'     => 'Classify',
        'demoVideoUrl' => 'DemoVideoUrl',
        'description'  => 'Description',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }
        if (null !== $this->demoVideoUrl) {
            $res['DemoVideoUrl'] = $this->demoVideoUrl;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return classifys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }
        if (isset($map['DemoVideoUrl'])) {
            $model->demoVideoUrl = $map['DemoVideoUrl'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
