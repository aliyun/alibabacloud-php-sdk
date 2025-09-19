<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListHoneypotPresetRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $honeypotImageName;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $presetName;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'honeypotImageName' => 'HoneypotImageName',
        'lang' => 'Lang',
        'nodeId' => 'NodeId',
        'nodeName' => 'NodeName',
        'pageSize' => 'PageSize',
        'presetName' => 'PresetName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
