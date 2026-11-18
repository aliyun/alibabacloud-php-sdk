<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\PreviewOutputFileResponseBody\slides;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\PreviewOutputFileResponseBody\version;

class PreviewOutputFileResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $content;

    /**
     * @var bool
     */
    public $degraded;

    /**
     * @var string
     */
    public $downloadExpiresAt;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $fileExt;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var string
     */
    public $itemType;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $outputItemId;

    /**
     * @var string
     */
    public $previewExpiresAt;

    /**
     * @var string
     */
    public $previewType;

    /**
     * @var string
     */
    public $previewUrl;

    /**
     * @var string
     */
    public $readState;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var slides[]
     */
    public $slides;

    /**
     * @var string
     */
    public $unavailableReason;

    /**
     * @var version
     */
    public $version;
    protected $_name = [
        'code' => 'code',
        'content' => 'content',
        'degraded' => 'degraded',
        'downloadExpiresAt' => 'downloadExpiresAt',
        'downloadUrl' => 'downloadUrl',
        'fileExt' => 'fileExt',
        'gmtModified' => 'gmtModified',
        'itemName' => 'itemName',
        'itemType' => 'itemType',
        'message' => 'message',
        'outputItemId' => 'outputItemId',
        'previewExpiresAt' => 'previewExpiresAt',
        'previewType' => 'previewType',
        'previewUrl' => 'previewUrl',
        'readState' => 'readState',
        'requestId' => 'requestId',
        'slides' => 'slides',
        'unavailableReason' => 'unavailableReason',
        'version' => 'version',
    ];

    public function validate()
    {
        if (\is_array($this->slides)) {
            Model::validateArray($this->slides);
        }
        if (null !== $this->version) {
            $this->version->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->degraded) {
            $res['degraded'] = $this->degraded;
        }

        if (null !== $this->downloadExpiresAt) {
            $res['downloadExpiresAt'] = $this->downloadExpiresAt;
        }

        if (null !== $this->downloadUrl) {
            $res['downloadUrl'] = $this->downloadUrl;
        }

        if (null !== $this->fileExt) {
            $res['fileExt'] = $this->fileExt;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->itemName) {
            $res['itemName'] = $this->itemName;
        }

        if (null !== $this->itemType) {
            $res['itemType'] = $this->itemType;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->outputItemId) {
            $res['outputItemId'] = $this->outputItemId;
        }

        if (null !== $this->previewExpiresAt) {
            $res['previewExpiresAt'] = $this->previewExpiresAt;
        }

        if (null !== $this->previewType) {
            $res['previewType'] = $this->previewType;
        }

        if (null !== $this->previewUrl) {
            $res['previewUrl'] = $this->previewUrl;
        }

        if (null !== $this->readState) {
            $res['readState'] = $this->readState;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->slides) {
            if (\is_array($this->slides)) {
                $res['slides'] = [];
                $n1 = 0;
                foreach ($this->slides as $item1) {
                    $res['slides'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->unavailableReason) {
            $res['unavailableReason'] = $this->unavailableReason;
        }

        if (null !== $this->version) {
            $res['version'] = null !== $this->version ? $this->version->toArray($noStream) : $this->version;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['degraded'])) {
            $model->degraded = $map['degraded'];
        }

        if (isset($map['downloadExpiresAt'])) {
            $model->downloadExpiresAt = $map['downloadExpiresAt'];
        }

        if (isset($map['downloadUrl'])) {
            $model->downloadUrl = $map['downloadUrl'];
        }

        if (isset($map['fileExt'])) {
            $model->fileExt = $map['fileExt'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['itemName'])) {
            $model->itemName = $map['itemName'];
        }

        if (isset($map['itemType'])) {
            $model->itemType = $map['itemType'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['outputItemId'])) {
            $model->outputItemId = $map['outputItemId'];
        }

        if (isset($map['previewExpiresAt'])) {
            $model->previewExpiresAt = $map['previewExpiresAt'];
        }

        if (isset($map['previewType'])) {
            $model->previewType = $map['previewType'];
        }

        if (isset($map['previewUrl'])) {
            $model->previewUrl = $map['previewUrl'];
        }

        if (isset($map['readState'])) {
            $model->readState = $map['readState'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['slides'])) {
            if (!empty($map['slides'])) {
                $model->slides = [];
                $n1 = 0;
                foreach ($map['slides'] as $item1) {
                    $model->slides[$n1] = slides::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['unavailableReason'])) {
            $model->unavailableReason = $map['unavailableReason'];
        }

        if (isset($map['version'])) {
            $model->version = version::fromMap($map['version']);
        }

        return $model;
    }
}
