<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class UpdateCorpRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

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
    public $isvSubId;

    /**
     * @var string
     */
    public $iconPath;
    protected $_name = [
        'corpId'       => 'CorpId',
        'corpName'     => 'CorpName',
        'appName'      => 'AppName',
        'parentCorpId' => 'ParentCorpId',
        'description'  => 'Description',
        'isvSubId'     => 'IsvSubId',
        'iconPath'     => 'IconPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
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
     * @return UpdateCorpRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
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
        if (isset($map['IsvSubId'])) {
            $model->isvSubId = $map['IsvSubId'];
        }
        if (isset($map['IconPath'])) {
            $model->iconPath = $map['IconPath'];
        }

        return $model;
    }
}
