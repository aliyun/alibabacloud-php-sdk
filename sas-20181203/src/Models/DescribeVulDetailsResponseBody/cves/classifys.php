<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulDetailsResponseBody\cves;

use AlibabaCloud\Dara\Model;

class classifys extends Model
{
    /**
     * @var string
     */
    public $classify;
    /**
     * @var string
     */
    public $demoVideoUrl;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
