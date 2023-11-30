<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class DomainSeniorConfig extends Model
{
    /**
     * @var bool
     */
    public $clientDownloadEnable;

    /**
     * @var string
     */
    public $cspFrameAncestors;

    /**
     * @var string
     */
    public $customLoginAppid;

    /**
     * @var string
     */
    public $customLoginUrl;

    /**
     * @var string
     */
    public $customLogoutUrl;

    /**
     * @var CustomSideLinkConfig[]
     */
    public $customSideLinkList;

    /**
     * @var string
     */
    public $homePageBgImageUrl;

    /**
     * @var string
     */
    public $homePageFooter;

    /**
     * @var string
     */
    public $homePageFooter2;

    /**
     * @var string
     */
    public $homePageSlogan;

    /**
     * @var bool
     */
    public $refererEnable;

    /**
     * @var WxTrustedDomainConfig
     */
    public $wxTxtList;
    protected $_name = [
        'clientDownloadEnable' => 'client_download_enable',
        'cspFrameAncestors'    => 'csp_frame_ancestors',
        'customLoginAppid'     => 'custom_login_appid',
        'customLoginUrl'       => 'custom_login_url',
        'customLogoutUrl'      => 'custom_logout_url',
        'customSideLinkList'   => 'custom_side_link_list',
        'homePageBgImageUrl'   => 'home_page_bg_image_url',
        'homePageFooter'       => 'home_page_footer',
        'homePageFooter2'      => 'home_page_footer2',
        'homePageSlogan'       => 'home_page_slogan',
        'refererEnable'        => 'referer_enable',
        'wxTxtList'            => 'wx_txt_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientDownloadEnable) {
            $res['client_download_enable'] = $this->clientDownloadEnable;
        }
        if (null !== $this->cspFrameAncestors) {
            $res['csp_frame_ancestors'] = $this->cspFrameAncestors;
        }
        if (null !== $this->customLoginAppid) {
            $res['custom_login_appid'] = $this->customLoginAppid;
        }
        if (null !== $this->customLoginUrl) {
            $res['custom_login_url'] = $this->customLoginUrl;
        }
        if (null !== $this->customLogoutUrl) {
            $res['custom_logout_url'] = $this->customLogoutUrl;
        }
        if (null !== $this->customSideLinkList) {
            $res['custom_side_link_list'] = [];
            if (null !== $this->customSideLinkList && \is_array($this->customSideLinkList)) {
                $n = 0;
                foreach ($this->customSideLinkList as $item) {
                    $res['custom_side_link_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->homePageBgImageUrl) {
            $res['home_page_bg_image_url'] = $this->homePageBgImageUrl;
        }
        if (null !== $this->homePageFooter) {
            $res['home_page_footer'] = $this->homePageFooter;
        }
        if (null !== $this->homePageFooter2) {
            $res['home_page_footer2'] = $this->homePageFooter2;
        }
        if (null !== $this->homePageSlogan) {
            $res['home_page_slogan'] = $this->homePageSlogan;
        }
        if (null !== $this->refererEnable) {
            $res['referer_enable'] = $this->refererEnable;
        }
        if (null !== $this->wxTxtList) {
            $res['wx_txt_list'] = null !== $this->wxTxtList ? $this->wxTxtList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DomainSeniorConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['client_download_enable'])) {
            $model->clientDownloadEnable = $map['client_download_enable'];
        }
        if (isset($map['csp_frame_ancestors'])) {
            $model->cspFrameAncestors = $map['csp_frame_ancestors'];
        }
        if (isset($map['custom_login_appid'])) {
            $model->customLoginAppid = $map['custom_login_appid'];
        }
        if (isset($map['custom_login_url'])) {
            $model->customLoginUrl = $map['custom_login_url'];
        }
        if (isset($map['custom_logout_url'])) {
            $model->customLogoutUrl = $map['custom_logout_url'];
        }
        if (isset($map['custom_side_link_list'])) {
            if (!empty($map['custom_side_link_list'])) {
                $model->customSideLinkList = [];
                $n                         = 0;
                foreach ($map['custom_side_link_list'] as $item) {
                    $model->customSideLinkList[$n++] = null !== $item ? CustomSideLinkConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['home_page_bg_image_url'])) {
            $model->homePageBgImageUrl = $map['home_page_bg_image_url'];
        }
        if (isset($map['home_page_footer'])) {
            $model->homePageFooter = $map['home_page_footer'];
        }
        if (isset($map['home_page_footer2'])) {
            $model->homePageFooter2 = $map['home_page_footer2'];
        }
        if (isset($map['home_page_slogan'])) {
            $model->homePageSlogan = $map['home_page_slogan'];
        }
        if (isset($map['referer_enable'])) {
            $model->refererEnable = $map['referer_enable'];
        }
        if (isset($map['wx_txt_list'])) {
            $model->wxTxtList = WxTrustedDomainConfig::fromMap($map['wx_txt_list']);
        }

        return $model;
    }
}
