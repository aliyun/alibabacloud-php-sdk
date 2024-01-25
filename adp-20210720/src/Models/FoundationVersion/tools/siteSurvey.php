<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\FoundationVersion\tools;

use AlibabaCloud\Tea\Model;

class siteSurvey extends Model
{
    /**
     * @var string
     */
    public $clusterCheckerURL;

    /**
     * @var string
     */
    public $clusterInfoBrief;
    protected $_name = [
        'clusterCheckerURL' => 'clusterCheckerURL',
        'clusterInfoBrief'  => 'clusterInfoBrief',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterCheckerURL) {
            $res['clusterCheckerURL'] = $this->clusterCheckerURL;
        }
        if (null !== $this->clusterInfoBrief) {
            $res['clusterInfoBrief'] = $this->clusterInfoBrief;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return siteSurvey
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clusterCheckerURL'])) {
            $model->clusterCheckerURL = $map['clusterCheckerURL'];
        }
        if (isset($map['clusterInfoBrief'])) {
            $model->clusterInfoBrief = $map['clusterInfoBrief'];
        }

        return $model;
    }
}
