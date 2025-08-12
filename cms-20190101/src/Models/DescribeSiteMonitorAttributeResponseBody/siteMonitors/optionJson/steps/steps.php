<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\steps;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\steps\steps\extractedVariables;

class steps extends Model
{
    /**
     * @var bool
     */
    public $allowFailure;

    /**
     * @var bool
     */
    public $autoExtractCookie;

    /**
     * @var extractedVariables
     */
    public $extractedVariables;

    /**
     * @var bool
     */
    public $isCritical;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $option;

    /**
     * @var string
     */
    public $stepName;

    /**
     * @var string
     */
    public $stepType;

    /**
     * @var string
     */
    public $url;

    /**
     * @var bool
     */
    public $useGeneratedCookie;

    /**
     * @var int
     */
    public $waitTimeInSecs;
    protected $_name = [
        'allowFailure' => 'allow_failure',
        'autoExtractCookie' => 'auto_extract_cookie',
        'extractedVariables' => 'extracted_variables',
        'isCritical' => 'is_critical',
        'name' => 'name',
        'option' => 'option',
        'stepName' => 'step_name',
        'stepType' => 'step_type',
        'url' => 'url',
        'useGeneratedCookie' => 'use_generated_cookie',
        'waitTimeInSecs' => 'wait_time_in_secs',
    ];

    public function validate()
    {
        if (null !== $this->extractedVariables) {
            $this->extractedVariables->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowFailure) {
            $res['allow_failure'] = $this->allowFailure;
        }

        if (null !== $this->autoExtractCookie) {
            $res['auto_extract_cookie'] = $this->autoExtractCookie;
        }

        if (null !== $this->extractedVariables) {
            $res['extracted_variables'] = null !== $this->extractedVariables ? $this->extractedVariables->toArray($noStream) : $this->extractedVariables;
        }

        if (null !== $this->isCritical) {
            $res['is_critical'] = $this->isCritical;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->option) {
            $res['option'] = $this->option;
        }

        if (null !== $this->stepName) {
            $res['step_name'] = $this->stepName;
        }

        if (null !== $this->stepType) {
            $res['step_type'] = $this->stepType;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        if (null !== $this->useGeneratedCookie) {
            $res['use_generated_cookie'] = $this->useGeneratedCookie;
        }

        if (null !== $this->waitTimeInSecs) {
            $res['wait_time_in_secs'] = $this->waitTimeInSecs;
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
        if (isset($map['allow_failure'])) {
            $model->allowFailure = $map['allow_failure'];
        }

        if (isset($map['auto_extract_cookie'])) {
            $model->autoExtractCookie = $map['auto_extract_cookie'];
        }

        if (isset($map['extracted_variables'])) {
            $model->extractedVariables = extractedVariables::fromMap($map['extracted_variables']);
        }

        if (isset($map['is_critical'])) {
            $model->isCritical = $map['is_critical'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['option'])) {
            $model->option = $map['option'];
        }

        if (isset($map['step_name'])) {
            $model->stepName = $map['step_name'];
        }

        if (isset($map['step_type'])) {
            $model->stepType = $map['step_type'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        if (isset($map['use_generated_cookie'])) {
            $model->useGeneratedCookie = $map['use_generated_cookie'];
        }

        if (isset($map['wait_time_in_secs'])) {
            $model->waitTimeInSecs = $map['wait_time_in_secs'];
        }

        return $model;
    }
}
