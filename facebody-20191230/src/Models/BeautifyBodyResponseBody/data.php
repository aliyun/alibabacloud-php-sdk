<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\BeautifyBodyResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $XFlowURL;

    /**
     * @var string
     */
    public $YFlowURL;

    /**
     * @var string
     */
    public $action;
    protected $_name = [
        'XFlowURL' => 'XFlowURL',
        'YFlowURL' => 'YFlowURL',
        'action'   => 'Action',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->XFlowURL) {
            $res['XFlowURL'] = $this->XFlowURL;
        }
        if (null !== $this->YFlowURL) {
            $res['YFlowURL'] = $this->YFlowURL;
        }
        if (null !== $this->action) {
            $res['Action'] = $this->action;
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
        if (isset($map['XFlowURL'])) {
            $model->XFlowURL = $map['XFlowURL'];
        }
        if (isset($map['YFlowURL'])) {
            $model->YFlowURL = $map['YFlowURL'];
        }
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        return $model;
    }
}
