<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class CreateCorpRequest extends Model
{
    /**
     * @var string
     */
    public $corpName;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $parentCorpId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $algorithmType;

    /**
     * @var string
     */
    public $isvSubId;

    /**
     * @var string
     */
    public $iconPath;
    protected $_name = [
        'corpName'      => 'CorpName',
        'appName'       => 'AppName',
        'parentCorpId'  => 'ParentCorpId',
        'description'   => 'Description',
        'algorithmType' => 'AlgorithmType',
        'isvSubId'      => 'IsvSubId',
        'iconPath'      => 'IconPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpName) {
            $res['CorpName'] = $this->corpName;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->parentCorpId) {
            $res['ParentCorpId'] = $this->parentCorpId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->algorithmType) {
            $res['AlgorithmType'] = $this->algorithmType;
        }
        if (null !== $this->isvSubId) {
            $res['IsvSubId'] = $this->isvSubId;
        }
        if (null !== $this->iconPath) {
            $res['IconPath'] = $this->iconPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCorpRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpName'])) {
            $model->corpName = $map['CorpName'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ParentCorpId'])) {
            $model->parentCorpId = $map['ParentCorpId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AlgorithmType'])) {
            $model->algorithmType = $map['AlgorithmType'];
        }
        if (isset($map['IsvSubId'])) {
            $model->isvSubId = $map['IsvSubId'];
        }
        if (isset($map['IconPath'])) {
            $model->iconPath = $map['IconPath'];
        }

        return $model;
    }
}
