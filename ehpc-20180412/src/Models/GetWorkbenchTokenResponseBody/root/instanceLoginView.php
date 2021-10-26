<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetWorkbenchTokenResponseBody\root;

use AlibabaCloud\Tea\Model;

class instanceLoginView extends Model
{
    /**
     * @var string
     */
    public $baseViewUrl;

    /**
     * @var string
     */
    public $defaultViewUrl;

    /**
     * @var string
     */
    public $fileTreeViewUrl;

    /**
     * @var string
     */
    public $rdpViewUrl;

    /**
     * @var string
     */
    public $terminalViewUrl;

    /**
     * @var string
     */
    public $viewName;
    protected $_name = [
        'baseViewUrl'     => 'baseViewUrl',
        'defaultViewUrl'  => 'defaultViewUrl',
        'fileTreeViewUrl' => 'fileTreeViewUrl',
        'rdpViewUrl'      => 'rdpViewUrl',
        'terminalViewUrl' => 'terminalViewUrl',
        'viewName'        => 'viewName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseViewUrl) {
            $res['baseViewUrl'] = $this->baseViewUrl;
        }
        if (null !== $this->defaultViewUrl) {
            $res['defaultViewUrl'] = $this->defaultViewUrl;
        }
        if (null !== $this->fileTreeViewUrl) {
            $res['fileTreeViewUrl'] = $this->fileTreeViewUrl;
        }
        if (null !== $this->rdpViewUrl) {
            $res['rdpViewUrl'] = $this->rdpViewUrl;
        }
        if (null !== $this->terminalViewUrl) {
            $res['terminalViewUrl'] = $this->terminalViewUrl;
        }
        if (null !== $this->viewName) {
            $res['viewName'] = $this->viewName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceLoginView
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['baseViewUrl'])) {
            $model->baseViewUrl = $map['baseViewUrl'];
        }
        if (isset($map['defaultViewUrl'])) {
            $model->defaultViewUrl = $map['defaultViewUrl'];
        }
        if (isset($map['fileTreeViewUrl'])) {
            $model->fileTreeViewUrl = $map['fileTreeViewUrl'];
        }
        if (isset($map['rdpViewUrl'])) {
            $model->rdpViewUrl = $map['rdpViewUrl'];
        }
        if (isset($map['terminalViewUrl'])) {
            $model->terminalViewUrl = $map['terminalViewUrl'];
        }
        if (isset($map['viewName'])) {
            $model->viewName = $map['viewName'];
        }

        return $model;
    }
}
