<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListHoneypotPresetRequest extends Model
{
    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The name of the honeypot image.
     *
     * @example ruoyi
     *
     * @var string
     */
    public $honeypotImageName;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the management node.
     *
     * @example d892b4fe-af0d-4486-ab2a-8a518045****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The name of the management node.
     *
     * @example Node1
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The number of entries to return on each page. Default value: 20. If you leave this parameter empty, 20 entries are returned on each page.
     *
     * > We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The custom name of the honeypot template.
     *
     * @example mx-rouyi
     *
     * @var string
     */
    public $presetName;
    protected $_name = [
        'currentPage'       => 'CurrentPage',
        'honeypotImageName' => 'HoneypotImageName',
        'lang'              => 'Lang',
        'nodeId'            => 'NodeId',
        'nodeName'          => 'NodeName',
        'pageSize'          => 'PageSize',
        'presetName'        => 'PresetName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->honeypotImageName) {
            $res['HoneypotImageName'] = $this->honeypotImageName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->presetName) {
            $res['PresetName'] = $this->presetName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHoneypotPresetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['HoneypotImageName'])) {
            $model->honeypotImageName = $map['HoneypotImageName'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PresetName'])) {
            $model->presetName = $map['PresetName'];
        }

        return $model;
    }
}
