<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\GetProductVersionDifferencesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $componentName;

    /**
     * @example Create/Delete/VersionUpdate/ConfigUpdate/NoChanged
     *
     * @var string
     */
    public $difference;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $preVersion;

    /**
     * @var string
     */
    public $releaseName;

    /**
     * @var bool
     */
    public $upgradeFlag;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'componentName' => 'componentName',
        'difference'    => 'difference',
        'message'       => 'message',
        'preVersion'    => 'preVersion',
        'releaseName'   => 'releaseName',
        'upgradeFlag'   => 'upgradeFlag',
        'version'       => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentName) {
            $res['componentName'] = $this->componentName;
        }
        if (null !== $this->difference) {
            $res['difference'] = $this->difference;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->preVersion) {
            $res['preVersion'] = $this->preVersion;
        }
        if (null !== $this->releaseName) {
            $res['releaseName'] = $this->releaseName;
        }
        if (null !== $this->upgradeFlag) {
            $res['upgradeFlag'] = $this->upgradeFlag;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['componentName'])) {
            $model->componentName = $map['componentName'];
        }
        if (isset($map['difference'])) {
            $model->difference = $map['difference'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['preVersion'])) {
            $model->preVersion = $map['preVersion'];
        }
        if (isset($map['releaseName'])) {
            $model->releaseName = $map['releaseName'];
        }
        if (isset($map['upgradeFlag'])) {
            $model->upgradeFlag = $map['upgradeFlag'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
