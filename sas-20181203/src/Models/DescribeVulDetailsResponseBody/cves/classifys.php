<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulDetailsResponseBody\cves;

use AlibabaCloud\Tea\Model;

class classifys extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $classify;

    /**
     * @var string
     */
    public $demoVideoUrl;
    protected $_name = [
        'description'  => 'Description',
        'classify'     => 'Classify',
        'demoVideoUrl' => 'DemoVideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }
        if (null !== $this->demoVideoUrl) {
            $res['DemoVideoUrl'] = $this->demoVideoUrl;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }
        if (isset($map['DemoVideoUrl'])) {
            $model->demoVideoUrl = $map['DemoVideoUrl'];
        }

        return $model;
    }
}
