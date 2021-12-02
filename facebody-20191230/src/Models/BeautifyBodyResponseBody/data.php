<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\BeautifyBodyResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $XFlowURL;

    /**
     * @var string
     */
    public $YFlowURL;
    protected $_name = [
        'action'   => 'Action',
        'XFlowURL' => 'XFlowURL',
        'YFlowURL' => 'YFlowURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->XFlowURL) {
            $res['XFlowURL'] = $this->XFlowURL;
        }
        if (null !== $this->YFlowURL) {
            $res['YFlowURL'] = $this->YFlowURL;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['XFlowURL'])) {
            $model->XFlowURL = $map['XFlowURL'];
        }
        if (isset($map['YFlowURL'])) {
            $model->YFlowURL = $map['YFlowURL'];
        }

        return $model;
    }
}
